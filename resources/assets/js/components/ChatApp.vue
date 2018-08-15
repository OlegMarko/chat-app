<template>
    <div class="chat-app">
        <conversation :contact="selectedContact" :messages="messages"></conversation>
        <contacts-list :contacts="contacts" @selected="startConversationWith"></contacts-list>
    </div>
</template>

<script>
    import Conversation from './Conversation';
    import ContactsList from './ContactsList';

    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: []
            }
        },
        mounted() {
            axios.get('/contacts')
                .then(response => {
                    this.contacts = response.data
                })
        },
        methods: {
            startConversationWith(contact) {
                axios.get(`/conversation/${contact.id}`)
                    .then(response => {
                        this.messages = response.data;
                        this.selectedContact = contact;
                    });
            }
        },
        components: { Conversation, ContactsList }
    }
</script>

<style lang="scss" scoped>
    .chat-app {
        display: flex;
    }
</style>
