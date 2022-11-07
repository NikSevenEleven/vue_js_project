<template>
<div>
    <CreateComponent></CreateComponent>
    <IndexComponent ref="index"></IndexComponent>

</div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default{
    name:"PostComponent",

    data() {
    return {
        persons:null
    }
            },

        mounted(){
            // console.log(this.$refs.index.indexLog());
        },

    methods: {
        parentLog()
        {
            console.log('This is parent log')
        }
    },


    components:{
            CreateComponent,
            IndexComponent
    }
}
</script>

<style scoped>

</style>