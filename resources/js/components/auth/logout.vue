<template>
 
</template>

<script type="text/javascript">
import axios from 'axios'

export default{
    created(){
        localStorage.removeItem('token')
        localStorage.removeItem('user')
        Toast.fire({
            icon: 'success',
            title: 'Successfully Log Out'      
        })
        this.$router.push({ name: '/'})


    }
}
</script>

<style>
</style>