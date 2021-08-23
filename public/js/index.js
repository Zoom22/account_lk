
const toggleHidden = (...fields) => {
    fields.forEach((field) => {
        if (field.hidden === true) {
            field.hidden = false;
        } else {
            field.hidden = true;
        }
    });
};
$(function(){
    $("#add-btn").on("click", function(e){

        const addTable = document.querySelector('#add-tbl');
        toggleHidden(addTable);
    });
});
