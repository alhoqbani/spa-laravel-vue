<template>
<div class="message">
    <div class="message-header">
        <p>
            Push to the stream...
        </p>
    </div>
    <div class="message-body">
        <span class="help is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
        <form @submit.prevent="onSubmit()" @keyup="form.errors.clear($event.target.name)">
            <p class="control">
                <textarea class="textarea" placeholder="Have something to say?" v-model="form.body"></textarea>
            </p>
            <p class="control">
                <button type="submit" class="button is-primary" :disabled="form.errors.any()">Push</button>
            </p>
        </form>
    </div>

</div>

</template>

<script>
export default {
    data() {
        return {
            form: new Form({
                body: '',
            }),
        }
    },

    methods: {
        onSubmit() {
            this.form
            .submit('post', '/statuses')
            .then(status => this.$emit('completed', status));
        }
    }


}

</script>
