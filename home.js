const faqs= document.querySelectorAll('.faq');

faqs.forEach(faq =>{
    faq.addEventListener('click',() => {
        faq.classList.toggle('open')
    })
})

//"<script>alert(document.getElementById('nic_no').value)</script>";

/*function displayPopup(){
    document.getElementById("popup").style.display="block";

}*/



