<template>
        <div class="block-list">
            <div v-for="block in _blocks" class="block">
                <label for="">Name: </label>
                <input type="text" v-model="block.name">
            </div>

        </div>
</template>

<script>
    export default{
        name: "BlockList",
        props: {
            block: {}
        },
        data() {
            return {
                _blocks: []
            }
        },
        created() {
            this._blocks = this.block;
        },
        methods: {
            getBlocks() {
                return this._blocks;
            }
        }
    }
</script>
