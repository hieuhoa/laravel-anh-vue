<template>
    <div class="user-dashboard">
       <div class="list-user-comp">
            <h4>List User</h4>
            <list-user @userSelected="childrenSelectUser"></list-user>
       </div>
       <div class="user-detail-comp">
            <h4>User Detail</h4>
            <user-detail :userDetailInfo="userSelectedFromChild"></user-detail>
       </div>
    </div>
</template>
<!-- ative event chid is name event child = dad funtion  -->
<script>
    import ListUser from './ListUser.vue'
    import UserDetail from './UserDetail.vue'
    export default {
        components:{
            ListUser,
            UserDetail
        },
        // Choose ListUser in Dash
        data(){
            return {
                userSelectedFromChild:{}
            }
        },
        methods:{
            childrenSelectUser(user,number,string){
                console.log(user)
                console.log(number)
                console.log(string)
                this.userSelectedFromChild =user
            }
        }

    }
//    from dashboard in UserDetail
</script>

<style lang="scss" scoped>
</style>
