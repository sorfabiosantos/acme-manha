import {
    HttpUser
} from "../../_shared/HttpUser.js";

const HttpUserLogin = new HttpUser();

console.log("API inicializada", HttpUserLogin);

const formLogin = document.querySelector("#formLogin");

formLogin.addEventListener("submit", async (event) => {
    event.preventDefault();
    const loginData = new FormData(formLogin);
    const headers = {
        email: loginData.get("email"),
        password: loginData.get("password")
    }

    try {
        const userLogin = await HttpUserLogin.loginUser({}, headers);
        console.log(userLogin);
    } catch (error) {
        console.error("Erro ao fazer login:", error);
    }

    /*
    try {
        fetch("http://localhost:8080/acme-manha/api/users/login", {
            method: "GET",
            headers: headers
        }).then((response) => {
            //console.log(response);
            response.json().then((userLogin) => {
                console.log(userLogin.data);
                localStorage.setItem("token", JSON.stringify(userLogin.data));
            });
        })
    } catch (error) {
       console.error("Erro ao fazer login:", error);
    }
    */
});