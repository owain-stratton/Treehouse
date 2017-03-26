import React from 'react';
import {render} from 'react-dom';

import './css/style.css';

import routes from './router';

render(
   routes,
   document.getElementById('root')
);
