let del_button=document.querySelectorAll('.delete');

del_button.addEventListener('click', (e)=>{

    let ajax=new XMLHttpRequest();
    let del_name=e.getAttribute("data");

    ajax.open("GET", `/add_tlf/delete_tlf?name=${del_name}`);
    ajax.onreadystatechange = function() {
        if(this.readyState === 4 && this.status === 200) {
            e.remove();
            console.log("Успех");
        }else {
            console.log("Ошибка");
        }
    };

    ajax.send();
});