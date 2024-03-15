const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');
const dataContainer = document.getElementById("data-container");
const datahead = document.getElementById("datahead");

fetch("http://localhost:5000/travel/"+ id)
.then(Response => Response.json())
.then(data => {
  console.log(data);
  data.forEach(get => {
    const postElement = document.createElement("div");
    postElement.innerHTML =  '<article class="popular__card">' +
    '<a href="incontent.php?id1=' + encodeURIComponent(get.id) + '&id2=' + encodeURIComponent(get.subId) + '">'+
    '<div class="popular__image">' +
    '<img src='+ get.picture1 +'alt="popular image" class="popular__img">' +
    '<div class="popular__shadow"></div>' +        
    '</a>' +
    '</div>' +
    '<h2 class="popular__title">' +
     get.name +
    '</h2>' +
    '<div class="popular__location">' +
    '<i class="ri-map-pin-line"></i>' +
    '<span>'+ get.detail +'</span>' +
    '</div>' +
    '</article>'
     
    
    
    //`ID: ${get.id} - name: ${get.name}, detail: ${get.detail}, description: ${get.description}`;
    
     // นำ Element ไปแปะที่ Container
    dataContainer.appendChild(postElement);

  })  
})
.catch(error =>{
  console.log("Error fetching data:", error);
})

// datahead 
fetch("http://localhost:5000/travel/"+ id + "/1")
.then(Response => Response.json())
.then(data => {
  console.log(data);
  data.forEach(get => {
    const postElement = document.createElement("div");
    postElement.innerHTML ='<h2 class="section__title">'+
    get.region +
    '</h2>' 
    
     // นำ Element ไปแปะที่ Container
     datahead.appendChild(postElement);

  })  
})
.catch(error =>{
  console.log("Error fetching data:", error);
})