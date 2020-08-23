<h1 class="ct">商品分類</h1>
<div class="ct">新增大分類<input type="text" name="big" id="big"><button onclick="addType(1)">新增</button></div>
<div class="ct">新增中分類
    <select name="biglist" id="biglist"></select>
    <input type="text" name="mid" id="mid"><button onclick="addType(2)">新增</button>
</div>
<div id="typelist"></div>

<h1 class="ct">商品管理</h1>
<div class="ct"><button onclick="location.href='?do=add_goods'">新增商品</button></div>
<div id="goodslist"></div>



<script>
getBig()
getTypeList()
getGoodsList()


function addType(type){
    let name,parent;
    switch(type){
        case 1:
            name=$("#big").val();
            parent=0;
        break;
        case 2:
            name=$("#mid").val();
            parent=$("#biglist").val();
        break;
    }
    $.post("api/save_type.php",{name,parent},function(){
        location.reload();
    })
}

function getBig(){
    $.get("api/get_big.php",function(bigs){
        $("#biglist").html(bigs)
    })
}

function getTypeList(){
    $.get("api/get_type_list.php",function(list){
        $("#typelist").html(list)
    })
}

function edit(id){
    let name=prompt("請輸入你要修改的名稱:",$("#t"+id).html());
    if(name!=null){
        $.post("api/save_type.php",{id,name},function(){
            $("#t"+id).html(name)
        })
    }
}

function getGoodsList(){
    $.get("api/get_goods_list.php",function(list){
        $("#goodslist").html(list)
    })
}

function sh(type,id){
    let sh;
    switch(type){
        case 1:
            $("#g"+id).html("販售中")
            sh=1
        break;
        case 2:
            $("#g"+id).html("己下架")
            sh=0
        break;
    }
    $.post("api/sh.php",{id,sh})

}
</script>