<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<form action="" method="post">

    <label for="name">Имя</label>
    <input type="text" id="name" name="name">

    <label for="tel">Телефон</label>
    <input type="tel" id="tel" name="tel">

    <button type="submit">Добавить</button>
</form><br>


<?php foreach ($list as $k=>$v):?>
<div>
    <div><?php echo "$k:$v";?></div>
    <div class="delete" data="<?php echo $k;?>">Удалить</div>
</div> <br>
<?php endforeach;?>
</body>
<script>
    let del_buttons=document.querySelectorAll('.delete');

    del_buttons.forEach(button=>{
        button.addEventListener('click', (e)=>{

            let ajax=new XMLHttpRequest();
            let del_name=e.target.getAttribute("data");

            ajax.open("GET", `http://telefon/delete_tlf/delete?name=${del_name}`);
            ajax.onreadystatechange = function() {
                if(this.readyState === 4 && this.status === 200) {
                    e.target.parentNode.remove();
                    console.log("Успех");
                }else {
                    console.log(ajax.statusText);
                }
            };

            ajax.send();
        });
    });

</script>

</html>