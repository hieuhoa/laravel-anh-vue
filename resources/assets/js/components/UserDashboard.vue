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

<script>
    import ListUser from './ListUser.vue'
    import UserDetail from './UserDetail.vue'
    export default {
        components:{
            ListUser,
            UserDetail
        },
        data(){
            return {
                userSelectedFromChild:{}
            }
        },
        methods:{
            childrenSelectUser(user){
                //console.log(user)
                this.userSelectedFromChild =user
            }
        }

    }
</script>

<style lang="scss" scoped>
</style>
