<template>
    <div class="conversation">
        <h1>{{ contact ? contact.name : 'Select a Contact' }}</h1>
        <messages-feed :contact="contact" :messages="messages"></messages-feed>
        <message-composer @send="sendMessage"></message-composer>
    </div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';

    export default {
        props: {
            contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            },
        },
        methods: {
            sendMessage(text) {
                console.log(text);
            }
        },
        components: { MessagesFeed, MessageComposer }
    }
</script>
