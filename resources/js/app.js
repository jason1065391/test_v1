export default {
    methods: {
        navigateTo(routeName) {
            this.$router.push({ name: routeName });
        }
    }
}