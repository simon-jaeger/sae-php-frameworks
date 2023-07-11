import axios from "axios"

axios.defaults.baseURL = "http://localhost:8000"
axios.defaults.withCredentials = true

async function main() {
  const login = await axios.post("/auth/login", {
    email: "simon.sae@mailinator.com",
    password: "pw",
  })
  const notes = await axios.get("/notes")
  console.log(notes.data)
}
main()

