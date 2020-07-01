export default class Block {
    id = 0;
    name = "default";
    fields = {
        name: "name",
        type: "text"
    };

    constructor(id) {
        this.id = id;
    }
}
