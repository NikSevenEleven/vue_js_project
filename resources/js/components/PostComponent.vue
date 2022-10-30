<template>
<div>
    <SinglePostComponent></SinglePostComponent>
    <div>Name:{{name}}</div>
    <button @click="sayHello">SayHello</button>
    <button @click="sayHi">SayHi</button>
    <p id="demo"> </p>
</div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default{
    name:"PostComponent",

    data() {
    return {
        name: 'Vasia',
        age : 20,
        arr:[
            [

            ]
        ],

         }
    },

    methods: {
        sayHello() {
            console.log('Hello')
        },
        sayHi () {
         console.log('hi')
        },
    },

    components:{
            SinglePostComponent
    }
}
</script>

<style scoped>

</style>