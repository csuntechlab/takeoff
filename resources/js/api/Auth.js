// AUTH API
//

import axios from 'axios';

axios.get('/oauth/clients')
    .then(response => {
        console.log(response.data);
    });


