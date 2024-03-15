// ดึงค่า id จาก URL parameter
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id1');
const subId = urlParams.get('id2');


const dataContainer = document.getElementById("data-container1");

// นำ id ไปใช้งานตามที่ต้องการ
if (id && subId) {
    console.log("ID from URL parameter:", id);
    console.log("SUBID from URL parameter:", subId);

    // เรียก fetch ข้อมูลตาม id
    fetch(`http://localhost:5000/travel/${id}/${subId}`)
        .then(response => response.json())
        .then(singleData => {
            console.log(singleData);
            singleData.forEach(item => {
                const postElement = document.createElement("div");
                postElement.innerHTML = '<div class="container">'+
                '<div class="content">'+
                '<div class="content_left">'+
                '<iframe class ="imgs" src='+ item.location +' width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'+
                '</div>'+
                '<div class="content_right">'+
                '<h1>'+ item.name +'</h1>'+
                '<p>'+ item.description +'</p>'+
                '<div class="gallery" >'+
                '<img class ="img" src='+ item.picture1 +'></img>'+
                '<img class ="img" src='+ item.picture2 +'></img>'+
                '<img class ="img" src='+ item.picture3 +'></img>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'


            // นำ Element ไปแปะที่ Container
            dataContainer.appendChild(postElement);
        })
    })
        .catch(error => {
            console.error('Error fetching single data:', error);
        });
} else {
    console.warn("No ID parameter found");
}
