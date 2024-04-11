 let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.container');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active1');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active1');
})



let products = [
    {
        id: 1,
        name: 'COFFEE',
        image: 'https://images.pexels.com/photos/3020919/pexels-photo-3020919.jpeg?auto=compress&cs=tinysrgb&w=600',
        price: 250
    },
    {
        id: 2,
        name: 'TEA',
        image: 'https://media.istockphoto.com/id/1297483389/photo/masala-tea-chai.jpg?s=612x612&w=0&k=20&c=Pv-QROSSywNh_qzHIIjHJeJB7OT0ujrKQsSiTgOmJAs=',
        price: 120
    },
    {
        id: 3,
        name: 'LASSI',
        image: 'https://media.istockphoto.com/id/1469838059/photo/kesariya-thandai-or-kesaria-sardai-traditional-indian-sweetened-refreshing-milk-flavored.jpg?s=612x612&w=0&k=20&c=oRMohlwB-LfERg0UreDnR3e3c7e3_jZ5onajb2UlQIU=',
        price: 220
    },
    {
        id: 4,
        name: 'FRUIT PUNCH',
        image: 'https://media.istockphoto.com/id/940969196/photo/blood-orange-cocktail-with-rum.jpg?s=612x612&w=0&k=20&c=zWmzW4_NeTJfFVF0WouHwmzL0AKTfdFBKB_PqpNAfnk=',
        price: 123
    },
    {
        id: 5,
        name: 'SMOOTHIES',
        image: "https://images.pexels.com/photos/103566/pexels-photo-103566.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        price: 250
    },
    {
        id: 6,
        name: 'MOCKTAIL',
        image: "https://images.pexels.com/photos/2093089/pexels-photo-2093089.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        price: 250
    },
    {
        id: 7,
        name: 'FRENCH FRIES',
        image: "https://images.pexels.com/photos/1893556/pexels-photo-1893556.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        price: 250
    },
    {
        id: 8,
        name: 'VEG BURGER',
        image: 'https://images.pexels.com/photos/1251196/pexels-photo-1251196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        price: 250
    },
    {
        id: 9,
        name: 'SANDWITCH',
        image: 'https://imgs.search.brave.com/RMGJAMhS6nT_mzaf-__mombbaKxKq-H3IpuBjl5eqdU/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvODkw/NzUxNTcwL3Bob3Rv/L2NoZWVzZS1zYW5k/d2ljaC5qcGc_cz02/MTJ4NjEyJnc9MCZr/PTIwJmM9MkZ1UUcx/X2tVOHU4SHBXMkVk/Njc2LUtmelFwVmdF/OFhCNUNfbzFRaVNV/MD0',
        price: 250
    },
    {
        id: 10,
        name: 'NOODLES',
        image: 'https://images.pexels.com/photos/2456435/pexels-photo-2456435.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        price: 250
    },
    {
        id: 11,
        name: 'PARATHA',
        image: 'https://images.pexels.com/photos/12737919/pexels-photo-12737919.jpeg?auto=compress&cs=tinysrgb&w=400',
        price: 250
    },
    {
        id: 12,
        name: 'CHILLI PANEER',
        image: 'https://imgs.search.brave.com/D95XkYNQpGbO8uWGhuZcfTPVf9lV50LTmLGaBGIIVkc/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/ZGlzaGJ5cmlzaC5j/by51ay93cC1jb250/ZW50L3VwbG9hZHMv/MjAyMS8wMy8yMDIx/MDMwOTE0MTcwOV9J/TUdfNDM2NS0xMDgw/eDE2MjAuanBn',
        price: 250
    },
    {
        id: 13,
        name: 'CHEESE TOAST',
        image: 'https://imgs.search.brave.com/igvgS13vfjZb5gryGROVXZheGNttsD7ewZblZeWd7Io/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/c2F2b3J5d2l0aHNv/dWwuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIwLzA4L0No/ZWVzZVRvYXN0NTIy/LTY4MHgxMDI0Lmpw/Zw',
        price: 250
    },
    {
        id: 14,
        name: 'PASTA',
        image: 'https://images.pexels.com/photos/1437267/pexels-photo-1437267.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        price: 250
    },
    {
        id: 15,
        name: 'PIZZA',
        image: 'https://images.pexels.com/photos/367915/pexels-photo-367915.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
        price: 250
    },
];

let listCards  = [];

function initApp() {
    let row = document.querySelector('.row'); // Get the row element

    products.forEach((value, key) => {
        // Create a new column for each product
        let newColumn = document.createElement('div');
        newColumn.classList.add("col-md-4");

        // Create the card element
        let newCard = document.createElement('div');
        newCard.classList.add("card");

        // Set the inner HTML of the card
        newCard.innerHTML = `
            <img src="${value.image}" class="card-img-top" alt="item 1">
            <div class="card-body">
                <h5 class="card-title">${value.name}</h5>
                <p class="card-text">₹ ${value.price.toLocaleString()}</p>
                <button class="btn btn-primary" onclick="addToCard(${key})">Add To Cart</button>
            </div>`;

        // Append the card to the column
        newColumn.appendChild(newCard);

        // Append the column to the row
        row.appendChild(newColumn);
    });
}


initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;

        // Show popup
        alert('Product added to cart!');
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="${value.image}"/></div>
                <div>${value.name}</div>
                <div>₹ ${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = "₹ "+ totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}