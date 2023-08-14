import axios from "axios"

axios.defaults.baseURL = "http://localhost:8000"
axios.defaults.withCredentials = true

const output = document.getElementById("output")!

async function ping() {
  const resp = await axios.get("/meta/ping")
  output.textContent = resp.data
}
document.getElementById("ping")!.onclick = ping

document.getElementById("reverse")!.onclick = async () => {
  const input = prompt("input")
  const resp = await axios.post("/meta/reverse", { input })
  output.textContent = resp.data
}

// async function login() {
//   // const email = prompt("email")
//   // const password = prompt("password")
//   const email = "amy@mailinator.com"
//   const password = "pw"
//   const resp = await axios.post("/auth/login", { email, password })
//   output.textContent = JSON.stringify(resp.data, null, 2)
// }
// document.getElementById("login")!.onclick = login
//
// async function logout() {
//   const resp = await axios.post("/auth/logout")
//   output.textContent = JSON.stringify(resp.data, null, 2)
// }
// document.getElementById("logout")!.onclick = logout
//
// async function notes() {
//   const resp = await axios.get("/notes")
//   output.textContent = JSON.stringify(resp.data, null, 2)
// }
// document.getElementById("notes")!.onclick = notes
