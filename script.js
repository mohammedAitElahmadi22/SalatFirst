setInterval(()=>{
        let d = new Date();

        document.querySelector('.time').innerText=`${d.getHours()} : ${d.getMinutes()} : ${d.getSeconds()}`
},1000)


let p =document.createElement('p');

p.className='paragraph';

buttonn = document.createElement('button')
buttonn.className = 'click';
buttonn.innerText='استمع إلى الأذان';
button_pos = document.createElement('button')
button_pos.className = 'click';
button_pos.innerText=' ايقاف الأذان';
button_pos.style.backgroundColor='red'

buttonn.onclick = ()=>{
    document.querySelector('audio').play()
}
button_pos.onclick = ()=>{
    document.querySelector('audio').pause()
}

function test(message){
    p.innerHTML=`${message}`
    document.querySelector('.time').after(p)
    document.querySelector('.paragraph').after(buttonn)
    buttonn.after(button_pos)
    document.querySelector('audio').play()
    setTimeout(()=>{
        buttonn.style.display='none';
        button_pos.style.display='none';
        document.querySelector('.paragraph').innerHTML=''
    },180000)
}
setInterval(()=>{
    let d = new Date();
if(d.getHours()== 5 && d.getMinutes()== 21 && d.getSeconds()==0){

    test('حان وقت الصلاة الفجر')

}else if(d.getHours()== 13 && d.getMinutes()== 30 && d.getSeconds()== 0){

    
    test('حان وقت الصلاة الظهر')

}else if(d.getHours()== 17 && d.getMinutes()== 3 && d.getSeconds()== 0){

    test('حان وقت الصلاة العصر')

}else if(d.getHours()== 20 && d.getMinutes()== 4 && d.getSeconds()== 0 ){

    test('حان وقت الصلاة المغرب')

}else if(d.getHours()== 21 && d.getMinutes()== 18 && d.getSeconds()== 0 ){
    
    test('حان وقت الصلاة العشاء')

}
},1000)



