import api from "../api";

export function getCurrentUser({ commit }, data) {
    return api.get("/user", data).then(({ data }) => {
        commit("setUser", data);
        return data;
    });
}

export function login({ commit }, data) {
    return api.post("/login", data).then(({ data }) => {
        commit("setUser", data.user);
        commit("setToken", data.token);
        return data;
    });
}

export function logout({ commit }) {
    return api.post("/logout").then((response) => {
        commit("setToken", null);

        return response;
    });
}

export function getCountries({ commit }) {
    return api.get("countries").then(({ data }) => {
        commit("setCountries", data);
    });
}

export function getOrders({ commit, state }, { url = null, search = "", per_page, sort_field, sort_direction } = {}) {
    commit("setOrders", [true]);
    url = url || "/orders";
    const params = {
        per_page: state.orders.limit,
    };
    return api
        .get(url, {
            params: {
                ...params,
                search,
                per_page,
                sort_field,
                sort_direction,
            },
        })
        .then((response) => {
            commit("setOrders", [false, response.data]);
        })
        .catch(() => {
            commit("setOrders", [false]);
        });
}

export function getOrder({ commit }, id) {
    return api.get(`/orders/${id}`);
}

export function getProducts({ commit, state }, { url = null, search = "", per_page, sort_field, sort_direction } = {}) {
    commit("setProducts", [true]);
    url = url || "/products";
    const params = {
        per_page: state.products.limit,
    };
    return api
        .get(url, {
            params: {
                ...params,
                search,
                per_page,
                sort_field,
                sort_direction,
            },
        })
        .then((response) => {
            commit("setProducts", [false, response.data]);
        })
        .catch(() => {
            commit("setProducts", [false]);
        });
}

export function getProduct({ commit }, id) {
    return api.get(`/products/${id}`);
}

export function createProduct({ commit }, product) {
    if (product.image instanceof File) {
        const form = new FormData();
        form.append("title", product.title);
        form.append("image", product.image);
        form.append("description", product.description || "");
        form.append("published", product.published ? 1 : 0);
        form.append("price", product.price);
        product = form;
    }
    return api.post("/products", product);
}

export function deleteProduct({ commit }, id) {
    return api.delete(`/products/${id}`);
}

export function getUsers({ commit, state }, { url = null, search = "", per_page, sort_field, sort_direction } = {}) {
    commit("setUsers", [true]);
    url = url || "/users";
    const params = {
        per_page: state.users.limit,
    };
    return api
        .get(url, {
            params: {
                ...params,
                search,
                per_page,
                sort_field,
                sort_direction,
            },
        })
        .then((response) => {
            commit("setUsers", [false, response.data]);
        })
        .catch(() => {
            commit("setUsers", [false]);
        });
}

export function createUser({ commit }, user) {
    return api.post("/users", user);
}

export function updateUser({ commit }, user) {
    return api.put(`/users/${user.id}`, user);
}

export function getCustomers(
    { commit, state },
    { url = null, search = "", per_page, sort_field, sort_direction } = {},
) {
    commit("setCustomers", [true]);
    url = url || "/customers";
    const params = {
        per_page: state.customers.limit,
    };
    return api
        .get(url, {
            params: {
                ...params,
                search,
                per_page,
                sort_field,
                sort_direction,
            },
        })
        .then((response) => {
            commit("setCustomers", [false, response.data]);
        })
        .catch(() => {
            commit("setCustomers", [false]);
        });
}

export function getCustomer({ commit }, id) {
    return api.get(`/customers/${id}`);
}

export function createCustomer({ commit }, customer) {
    return api.post("/customers", customer);
}

export function updateCustomer({ commit }, customer) {
    return api.put(`/customers/${customer.id}`, customer);
}

export function deleteCustomer({ commit }, customer) {
    return api.delete(`/customers/${customer.id}`);
}

export function updateProduct({ commit }, product) {
    const id = product.id;
    if (product.image instanceof File) {
        const form = new FormData();
        form.append("id", product.id);
        form.append("title", product.title);
        form.append("image", product.image);
        form.append("description", product.description || "");
        form.append("published", product.published ? 1 : 0);
        form.append("price", product.price);
        form.append("_method", "PUT");
        product = form;
    } else {
        product._method = "PUT";
    }
    return api.post(`/products/${id}`, product);
}
