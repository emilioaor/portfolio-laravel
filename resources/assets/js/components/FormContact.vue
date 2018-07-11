<template>
    <form :action="url" method="POST" name="contactForm" novalidate v-on:submit="sendContact($event)">
        <input type="hidden" name="_token" :value="token" />

        <div class="row">

            <div class="col-sm-6">

                <div class="form-group">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        v-validate
                        data-vv-rules="required|max:30"
                        v-model="formContact.name"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('name')}"
                        class="form-control"
                        placeholder="Mi nombre es Emilio Ochoa. ¿Y el tuyo?"
                        tabindex="1">
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('name', 'required')">
                            Campo requerido
                        </p>
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('name', 'max')">
                            Maximo 30 caracteres
                        </p>
                </div>

                <div class="form-group">
                    <textarea
                        id="goals"
                        name="goals"
                        v-validate
                        data-vv-rules="required"
                        v-model="formContact.goals"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('goals')}"
                        class="form-control"
                        rows="4"
                        placeholder="¿Cuales son los objetivos que deseas alcanzar con tu pagina web?"
                        tabindex="3"></textarea>
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('goals', 'required')">
                            Campo requerido
                        </p>
                </div>

                <div class="form-group">
                    <textarea
                        id="references"
                        name="references"
                        v-validate
                        data-vv-rules="required"
                        v-model="formContact.references"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('references')}"
                        class="form-control"
                        rows="4"
                        placeholder="Pásame el link de una o mas paginas cuya estructura o diseño te agrade así no sea de tu rubro"
                        tabindex="5"></textarea>
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('references', 'required')">
                            Campo requerido
                        </p>
                </div>

                <div class="form-group">
                    <select
                        name="amount"
                        id="amount"
                        tabindex="6"
                        v-validate
                        data-vv-rules="required|min:10"
                        v-model="formContact.amount"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('amount')}"
                        class="form-control"
                        >
                            <option value="0">¿Cuanto tenias pensado invertir?</option>
                            <option>50$ - 100$</option>
                            <option>101$ - 150$</option>
                            <option>151$ - 200$</option>
                            <option>201$ o mas</option>
                    </select>
                    <p class="text-danger error" v-if="formContact.send && errors.firstByRule('amount', 'required')">
                        Campo requerido
                    </p>
                    <p class="text-danger error" v-else-if="formContact.send && errors.firstByRule('amount', 'min')">
                        Campo requerido
                    </p>
                </div>

            </div>

            <div class="col-sm-6">

                <div class="form-group">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        v-model="formContact.email"
                        v-validate
                        data-vv-rules="required|email"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('email')}"
                        class="form-control"
                        placeholder="Email para poder comunicarnos"
                        tabindex="2">
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('email', 'required')">
                            Campo requerido
                        </p>
                        <p class="text-danger error" v-else-if="formContact.send && errors.firstByRule('email', 'email')">
                            Formato invalido
                        </p>
                </div>

                <div class="form-group">
                    <textarea
                        id="references2"
                        name="references2"
                        v-validate
                        data-vv-rules="required"
                        v-model="formContact.references2"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('references2')}"
                        class="form-control"
                        rows="4"
                        placeholder="Pásame el link de una o mas paginas de la competencia que consideres este haciendo un buen trabajo"
                        tabindex="4"></textarea>
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('references2', 'required')">
                            Campo requerido
                        </p>
                </div>

                <div class="form-group">
                    <textarea
                        id="message"
                        name="message"
                        v-validate
                        data-vv-rules="required"
                        v-model="formContact.message"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('message')}"
                        class="form-control"
                        rows="4"
                        placeholder="¿Algo mas que decir?. Este es el momento, deja todo los mas detallado posible para brindarte un mejor servicio"
                        tabindex="5"></textarea>
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('message', 'required')">
                            Campo requerido
                        </p>
                </div>

                <div class="form-group">
                    <input
                        type="text"
                        id="endTime"
                        name="endTime"
                        v-validate
                        data-vv-rules="required"
                        v-model="formContact.endTime"
                        v-bind:class="{'input-danger' : formContact.send && errors.has('endTime')}"
                        class="form-control"
                        placeholder="¿En cuanto tiempo esperas recibir tu proyecto culminado?"
                        tabindex="7">
                        <p class="text-danger error" v-if="formContact.send && errors.firstByRule('endTime', 'required')">
                            Campo requerido
                        </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <button class="btn-primary-medium"><span class="glyphicon glyphicon-envelope"></span> Enviar</button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: ['url', 'token'],
        data: function () {
            return {
              formContact: {
                name: '',
                email: '',
                goals: '',
                references: '',
                references2: '',
                message: '',
                amount: '',
                endTime: '',
                send: false
              }
            }
        },
        methods: {
            sendContact: function (event) {
                // Marcar el form como enviado
                this.formContact.send = true;

                // Validar si hay errores
                this.$validator.validateAll().then((result) => {

                    if (! result) {
                        event.preventDefault();
                    }

                    return;
                });
            }
        }
    }
</script>
