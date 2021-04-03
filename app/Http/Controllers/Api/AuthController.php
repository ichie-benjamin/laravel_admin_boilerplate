<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public $loginAfterSignUp = true;

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','loginUser','register','followersId']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $data = $this->getData($request);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

//        $user->sendEmailVerificationNotification();
//        if ($this->loginAfterSignUp) {
//            return $this->loginUser($request);
//        }
        return response()->json(['status' => 'success'], 200);
    }

    public function login(Request $request)
    {
        // assuming that the email or username is passed through a 'login' parameter
        $login = $request->input('email');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        $request->merge([$field => $login]);
        $credentials = $request->only($field, 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = $token = auth('api')->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return auth('api')->user();
//        return response()->json(auth('api')->user()->with('profile'));
    }
    public function user()
    {
        return  auth()->user();
    }

    public function update(Request $request)
    {
        $data = $this->updateData($request);
        if(strlen($data['pass']) > 5){
            $data['password'] = bcrypt($data['pass']);
        }
        if(strlen($data['img']) > 5){
            $data['avatar'] = $data['img'];
        }
        $user = user::find(auth('api')->user()->id);
        $update = $user->update($data);
        return response()->json($user);
//        return response()->json(auth('api')->user()->with('profile'));
    }

    public function adminUpdate(Request $request)
    {
        $data = $this->adminUpdateData($request);
        $user = user::find($data['id']);
        $update = $user->update($data);
        return response()->json($update);
//        return response()->json(auth('api')->user()->with('profile'));
    }

    public function imageUpdate(Request $request)
    {
        $data = $request->all();
        $user = user::find(auth()->user()->id);
        $cover_pics = $user->cover_pics;
        $avatar = $user->avatar;

        if($request->has('cover_pics')){
            $folder = '/uploads/'.auth()->user()->id.'/cp'.$data['cover_pics'];
            Storage::disk('local_public')->move($data['cover_pics'], $folder);
            $data['cover_pics'] = $folder;

            $userItem = User::find($user->id);
            $userItem->addMedia(public_path($data['cover_pics']))
                ->preservingOriginal()
                ->toMediaCollection('media');

            $update = $user->update($data);
            if($cover_pics != '/images/cover.png' && Storage::disk('local_public')->exists($cover_pics)){
                unlink(public_path($cover_pics));
            }
        }else {
            $folder = '/uploads/'.auth()->user()->id.'/avatar'.$data['avatar'];
            Storage::disk('local_public')->move($data['avatar'], $folder);
            $data['avatar'] = $folder;
            $userItem = User::find($user->id);
            $userItem->addMedia(public_path($data['avatar']))
                ->preservingOriginal()
                ->toMediaCollection('media');
            $update = $user->update($data);
            if($avatar != '/images/avatar.png' && Storage::disk('local_public')->exists($avatar)){
                unlink(public_path($avatar));
            }
        }
        return response()->json($update);
//        return response()->json(auth('api')->user()->with('profile'));
    }

    public function profile($username){
        $user = User::whereUsername($username)->firstOrFail();
        if($user->user_type != 5){
            return $user;
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'user' => $this->guard()->user(),
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current_password'), auth()->user()->password))) {
            // The passwords matches
            return response()->json('Your current password does not matches with the password you provided. Please try again.', 500);
        }
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return response()->json('New Password cannot be same as your current password. Please choose a different password', 500);
        }
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = auth()->user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return response()->json('success');
    }

    public function guard() {
        return \Auth::Guard('api');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'phone' => 'required|min:3|unique:users',
            'business_owner' => 'required|boolean',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed',
        ];
        $data = $request->validate($rules);
        return $data;
    }
    protected function updateData(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'phone' => 'nullable',
            'pass' => 'nullable',
            'img' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function destroy($id)
    {
        $user = User::destroy($id);
        return response()->json($user);
    }

    protected function adminUpdateData(Request $request)
    {
        $rules = [
            'banned' => 'required',
            'counsellor_approved' => 'required',
            'id' => 'required',
        ];
        return $request->validate($rules);
    }

}
