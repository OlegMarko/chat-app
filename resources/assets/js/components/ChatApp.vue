<template>
    <div class="chat-app">
        <conversation :contact="selectedContact" :messages="messages"></conversation>
        <contacts-list :contacts="contacts"></contacts-list>
    </div>
</template>

<script>
    import Conversation from './Conversation';
    import ConversationList from './ContactsList';

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
        components: { Conversation, ConversationList }
    }
</script>
