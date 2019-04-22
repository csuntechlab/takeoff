<template>
	<div class="pt-4">
        <div class="text-primary">
            Add new students
        </div>
        <div class="input-group mt-2 mb-3">
        <input type="text" class="form-control" placeholder="Student name" maxlength="50" v-model="form.email">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" @click="sendInvite">Add</button>
            </div>
        </div>
	</div>
</template>



<script>
import invitations from './../../api/invitations.js'

export default {
	data () {
        return {
            form: {     //name according to the componeent or object adjacent to payload
                email: ''
            }
        }
    },
    methods: {
        sendInvite() {
            invitations.inviteUserAPI (
                this.form,
                success => {
                    console.log('Invitation sent')
                    this.form.email = ''
                },
                error => {
                    console.log('Error: Email not sent', this.form.email)
                    console.log(error)
                }
            )
        }
    }
};
</script>
