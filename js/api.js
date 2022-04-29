import axios from 'axios';

const api = axios.create({
    baseURL:'./salva_bd.php',
});

export default api;
