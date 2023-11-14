fetch("https://marcconrad.com/uob/tomato/api.php")
  .then((data) => {
    return data.json(); // Convert to an object
  })
  .then((objectData) => {
    console.log(objectData.question);
    document.getElementById("display").src = objectData.question;
  });
