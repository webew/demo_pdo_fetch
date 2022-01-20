const response = await fetch("getUsersJson.php");
console.log(response);
const data = await response.json();
console.log(data);

data.forEach(user => {
    const h1 = document.createElement("h1");
    h1.textContent = user.id;
    const p = document.createElement("p");
    p.textContent = user.email;
    document.body.appendChild(h1);
    document.body.appendChild(p);
});