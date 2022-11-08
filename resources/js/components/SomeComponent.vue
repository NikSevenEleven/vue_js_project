<template>
    <div>
        <!-- <div>Color: {{obj.color}}</div>
        <div>Number: {{obj.number > 10 ? 'more ten' : 'less ten'}}</div>
        <div>isPublished: {{obj.isPublished ? 'Published' : 'Not Published'}}</div> -->
    </div>
</template>
    
    <script>

    export default{
        name:"SomeComponent",
    


        data()
         {
            return {

            }
        },

        props: [
          'obj' 
        ],

        mounted(){
            this.$parent.$parent.parentLog()
        },

        methods: {

        }

    

        
    }
    </script>
    
    <style scoped>
    
    </style>