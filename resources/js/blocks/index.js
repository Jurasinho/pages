import BlockAdmin from "./Block";
import BlockList from "./BlockList";

export default {
    install(Vue) {
        Vue.component('block-list', BlockList);
    }
}
