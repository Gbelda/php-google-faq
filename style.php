<?php

header("Content-type: text/css");

?>

*{
    padding:0;
    margin:0,
    box-style: border-box,
}

.logo_container,
.index_container{
    display: flex;
    align-items: center;
}

ul{
    border-bottom: 1px solid gray;
}

li{
    list-style: none;
    margin-right: 2rem;
    padding-bottom: 1rem;
}

.selected{
    color: cornflowerblue;
    border-bottom: 2px solid blue;
}

.mute{
    border-bottom: 2px solid transparent;
}

main{
    width: 60%;
    margin: auto;
    padding-top: 5rem;
}

