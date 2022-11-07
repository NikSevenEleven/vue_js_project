<template>
    
</template>
    
    <script>

    export default{
        name:"SomeComponent",
    


        data()
         {
            return {

            }
        },

        mounted(){
            this.$parent.$parent.parentLog()
        },

        methods: {

        }

    

        
    }
    </script>
    
    <style scoped>
    
    </style>