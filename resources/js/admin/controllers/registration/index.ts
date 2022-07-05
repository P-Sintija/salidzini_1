import {createApp} from "vue";
// @ts-ignore
import RegistrationGrid from "./components/RegistrationGrid";

const app = createApp({})

app.component('registration-grid', RegistrationGrid)
app.mount('#registration-grid')
