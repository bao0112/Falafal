import axios from "axios";
import store from "../store";
import router from "../router/index.js";

const api = axios.create({
    baseURL: "http://localhost:8000/api",
});

api.interceptors.request.use((config) => {
    config.headers.Authorization = `Bearer ${store.state.user.token}`;
    return config;
});

api.interceptors.response.use(
    (response) => {
        return response;
    },
    (error) => {
        if (error.response.status === 401) {
            store.commit("setToken", null);
            router.push({ name: "login" });
        }
        throw error;
    },
);

export default api;
