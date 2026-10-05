
// dynamic part for FEATURES 

const features = [

   {
      icon: "📝",
      title: "ثبت نام",
      description: "سیستم کاروونکو ته د ثبت اجازه ورکوي"
   },

   {
      icon: "🔐",
      title: "ننوتل",
      description: "کاروونکي خپل حساب ته داخلیږي"
   },
   {
      icon: "💧",
      title: "مصرف ثبت",
      description: "د اوبو مصرف ثبت او اپډیټ کیږي"
   },
   {
      icon: "🧾",
      title: "بیلینګ",
      description: "فواتیر په اتومات ډول جوړیږي"
   },
   {
      icon: "💳",
      title: "تادیه",
      description: "د حسابونو تادیه ترسره کیږي"
   },

   {
      icon: "📊",
      title: "راپورونه",
      description: "سیستم مختلف راپورونه جوړوي"
   },
   {
      icon: "📋",
      title: "مدیر ډشبورډ",
      description: "مدیر ته د ټولو معلوماتو لیدلو او تنظیم کولو بشپړ کنټرول وړاندې کیږی"
   },
   {
      icon: "🛡️",
      title: "امنيت",
      description: "دکاروونکو شخصي معلومات خوندي ساتل کیږي او د معلوماتو محرمیت خوندي دی."
   }

];

const featuresContainer =
document.getElementById("featuresContainer");

features.forEach(feature => {

   featuresContainer.innerHTML += `

   <article class="feature-card">

      <span class="icon">${feature.icon}</span>

      <h3>${feature.title}</h3>

      <p>${feature.description}</p>

   </article>

   `;

});


// dynamic part for GALLERY 

const galleryImages = [

   
   "images/ivan-bandura-Ac97OqAWDvg-unsplash.jpg",

   "images/jimmy-chang-NP8gd2KUnfw-unsplash.jpg",

   "images/kerem-karaarslan-6-4vPo17qoc-unsplash.jpg",

   "images/manuel-lanni-A5u5YsAa4ts-unsplash.jpg",

   "images/markus-spiske-sFydXGrt5OA-unsplash.jpg",

   "images/nathan-dumlao-x7Lyx8Yyvug-unsplash.jpg",
   "images/ries-bosch-8Ce_vn99TUE-unsplash.jpg",
   "images/5.jpg"
];

const galleryContainer =
document.getElementById("galleryContainer");

galleryImages.forEach(image => {

   galleryContainer.innerHTML += `

   <img src="${image}" alt="gallery image">

   `;

});


// dynamic part for FAQ 

const faqs = [

   {
      question: "ایا داسیسټم وړیا دی؟",
      answer: "هو، دا بنسټیز سیسټم وړیا دی"
   },

   {
      question: "ایا معلومات خوندي دي؟",
      answer: "هو، د ټول سیسټم  معلومات خوندي ساتل کیږي"
   },

   {
      question: "هر وخت دا سیسټم لغوه کولی شم؟",
      answer: "هو، هر وخت خپل سیسټم لغوه کولی شئ"
   },

   {     question: "ایا دا سیسټم د باور وړ دی؟",
      answer: "هو،داسیسټم باوري دي تر پخوانی سیسټمونو"
    }

];

const faqContainer =
document.getElementById("faqContainer");

faqs.forEach(faq => {

   faqContainer.innerHTML += `

   <article>

      <h3>${faq.question}</h3>

      <p>${faq.answer}</p>

   </article>

   `;

});
// => => => API <= <= <=
async function showData(){

   let response =
   await fetch("/data/customers.json");

   let data =
   await response.json();

   let container =
   document.querySelector("#customersContainer");

   for(let user of data){

      let card =
      document.createElement("div");

      card.classList.add("card");


      let image =
      document.createElement("img");

      image.src = user.image;


      let username =
      document.createElement("h2");

      username.textContent = user.name;


      let useremail =
      document.createElement("p");

      useremail.textContent = user.email;


      let description =
      document.createElement("p");

      description.textContent =
      user.description;


      card.append(
         image,
         username,
         useremail,
         description
      );

      container.append(card);

   }

}

showData();

