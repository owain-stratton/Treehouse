import React from 'react';
import { Router, Route, browserHistory, IndexRedirect } from 'react-router';

import App from './app/components/App';
import Home from './app/components/Home';
import About from './app/components/About';
import Courses from './app/components/Courses';
import Teachers from './app/components/Teachers';
import NotFound from './app/components/NotFound';
import Featured from './app/components/Featured';

import CourseContainer from './app/components/courses/CourseContainer';
import CourseList from './data/courses';

const routes = (
   <Router history={browserHistory}>
      <Route component={App}>
         <Route path="/" component={Home}/>
         <Route path="about" component={About}/>
         <Route path="courses" component={Courses}>
            <IndexRedirect to="html" />
            <Route path="html" component={CourseContainer} data={CourseList.HTML} />
            <Route path="css" component={CourseContainer} data={CourseList.CSS} />
            <Route path="javascript" component={CourseContainer} data={CourseList.JS} />
         </Route>
         <Route path="teachers" component={Teachers} />
         <Route path="featured/:topic/:name" component={Featured} />
         <Route path="*" component={NotFound} />
      </Route>
   </Router>
);

export default routes;
