@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script src="https://unpkg.com/vue-select@latest"></script>
    <link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
@endsection
@section('head_title')
    CRUD Generator
@endsection
@section('content')

    <div id="manthra">
        <form action="#" @submit.prevent="handleSubmit">
            <div class="container">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            @{{ welcome }}
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                              <span class="icon">
                                   <i class="fas fa-angle-down" aria-hidden="true"></i>
                              </span>
                        </a>
                    </header>

                    <div class="card-content">
                        <div class="content">
                            <div class="columns">
                                <div class="column"></div>
                                <div class="column is-four-fifths">
                                    <div class="columns">
                                        <div class="column">
                                            <div class="field">
                                                <label class="label">Model Name<sup style="color:red">*</sup></label>
                                                <div class="control">
                                                    <input class="input" type="text" v-model="model" placeholder="eg: Post" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="field">
                                                <label class="label">Model Namespace</label>
                                                <div class="control">
                                                    <input class="input" type="text" v-model="model_namespace" placeholder="eg: Models">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column">
                                            <div class="field">
                                                <label class="label">Controller Namespace</label>
                                                <div class="control">
                                                    <input class="input" type="text" v-model="controller_namespace" placeholder="eg: Admin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="field">
                                                <label class="label">View Path</label>
                                                <div class="control">
                                                    <input class="input" type="text" v-model="view_path" placeholder="eg: admin">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column">
                                            <div class="field">
                                                <label class="label">Route Group</label>
                                                <div class="control">
                                                    <input class="input" type="text" v-model="route_group" placeholder="eg: admin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <label class="label">What type do you want to generate
                                                <sup style="color:red">*</sup>
                                            </label>
                                            <input type="checkbox" v-model="generate_type" value="web">
                                            Web
                                            <br>
                                            <input type="checkbox" v-model="generate_type" value="api">
                                            Api
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column">
                                            <label class="label">Run migration after generate</label>
                                            <input type="checkbox" v-model="migration" value="true">
                                            Yes
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column">
                                            <label class="label">Fields (Draggable)<sup style="color:red">*</sup></label>
                                        </div>
                                        <div class="column">
                                            <div class="field is-right" style="float: right">
                                                <a class="button is-link" @click="addMoreFields">Add Field</a>
                                            </div>
                                        </div>
                                    </div>
                                    <draggable v-model="fields">
                                        <transition-group>
                                            <div v-for="(field, i) in fields" :key="i">
                                                <div class="columns">
                                                    <div class="column">
                                                        <input class="input" type="text" v-model="field.name" placeholder="Field Name" required>
                                                    </div>
                                                    <div class="column">
                                                        <v-select v-model="field.type" :options="types"></v-select>
                                                    </div>
                                                    <div class="column">
                                                        <input class="input" type="text" v-model="field.validation" placeholder="eg: required|min:10">
                                                    </div>
                                                    <div class="column">
                                                        <input type="checkbox" v-model="field.nullable"> nullable
                                                    </div>
                                                    <div class="column">
                                                        <a class="button is-danger" @click="removeFields(i)">X</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </draggable>
                                    <div class="columns">
                                        <div class="column">
                                            <div class="field">
                                                <button class="button is-primary" type="submit" :class="loading ? 'is-loading' : null">Generate</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <div class="card-footer-item">
                            <h3>
                                Made with ❤️
                                <a href="https://github.com/nicoaudy" target="_blank">🔥 NicoAudy</a>
                            </h3>
                        </div>
                    </footer>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js"></script>
    <script>
        Vue.config.devtools = true
        Vue.use(Toasted)
        Vue.use(vuedraggable)
        Vue.component('v-select', VueSelect.VueSelect);

        new Vue({
            el: '#manthra',
            mounted() {
                this.$toasted.show("🧛Just write what you want, and let manthra do the rest 🔥🤙", {
                    theme: "outline",
                    position: "top-right",
                    duration: 3000
                });
            },
            data: {
                welcome: 'CRUD Generator',
                loading: false,
                types: [
                    'string',
                    'char',
                    'varchar',
                    'date',
                    'datetime',
                    'time',
                    'timestamp',
                    'text',
                    'mediumtext',
                    'longtext',
                    'json',
                    'jsonb',
                    'binary',
                    'integer',
                    'bigint',
                    'tinyint',
                    'smallint',
                    'boolean',
                    'decimal',
                    'double',
                    'float',
                    'file'
                ],

                model: '',
                generate_type: ['web'],
                fields: [{
                    name: '',
                    type: 'string',
                    nullable: false,
                    validation: ''
                }],
                controller_namespace: '',
                model_namespace: '',
                view_path: '',
                route_group: '',
                migration: false
            },
            methods: {
                addMoreFields() {
                    this.fields.push({
                        name: '',
                        type: 'string',
                        nullable: false,
                        validation: ''
                    })
                },
                removeFields(i) {
                    this.fields.splice(i, 1)
                },
                resetForm() {
                    this.model = ''
                    this.fields = [{
                        name: '',
                        type: 'string',
                        nullable: false,
                        validation: ''
                    }]
                    this.controller_namespace = ''
                    this.model_namespace = ''
                    this.view_path = ''
                    this.route_group = ''
                    this.migration = false
                },
                async handleSubmit() {
                    this.loading = true

                    this.$toasted.show("Manthra is working... 🧛‍🧛‍", {
                        theme: "bubble",
                        position: "top-right",
                        duration: 3000
                    });

                    try {
                        let data = {}
                        data['model'] = this.model
                        data['fields'] = this.fields
                        data['controller_namespace'] = this.controller_namespace
                        data['model_namespace'] = this.model_namespace
                        data['view_path'] = this.view_path
                        data['route_group'] = this.route_group
                        data['generate_type'] = this.generate_type
                        data['migration'] = this.migration

                        const response = await axios.post('/manthra', data)
                        const result = await response

                        setTimeout(() => {
                            this.resetForm()
                            this.loading = false
                            this.$toasted.show("Manthra success generated 🤙☕", {
                                theme: "outline",
                                position: "top-right",
                                duration: 3000
                            });
                        }, 1000)
                    } catch (error) {
                        this.loading = false
                        this.$toasted.show("whoops looks like something went wrong, please check your input. 🔥🔥🔥", {
                            theme: "outline",
                            position: "top-right",
                            duration: 5000
                        });
                    }
                }
            }
        })
    </script>
@endsection
