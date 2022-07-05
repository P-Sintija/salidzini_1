import {createApp} from "vue";
// @ts-ignore
import LoginGrid from "./components/LoginGrid";

const app = createApp({})

app.component('login-grid', LoginGrid)
app.mount('#login-grid')
