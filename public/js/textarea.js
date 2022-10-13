//textareaの要素を取得
let exampleFormControlTextarea1 = document.getElementById('textarea');
//textareaのデフォルトの要素の高さを取得
let clientHeight = exampleFormControlTextarea1.clientHeight;

//textareaのinputイベント
exampleFormControlTextarea1.addEventListener('input', ()=>{
    //textareaの要素の高さを設定（rows属性で行を指定するなら「px」ではなく「auto」で良いかも！）
    exampleFormControlTextarea1.style.height = clientHeight + 'px';
    //textareaの入力内容の高さを取得
    let scrollHeight = exampleFormControlTextarea1.scrollHeight;
    //textareaの高さに入力内容の高さを設定
    exampleFormControlTextarea1.style.height = scrollHeight + 'px';
});