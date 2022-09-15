import logo from './logo.svg';
import './App.css';
import {SecureRoute} from "@okta/okta-react";

import { Route, BrowserRouter as Router } from 'react-router-dom';
import Home from "./Components/Home";
import IssueTracker from "./Components/IssueTracker";



function App() {
  return (
      <Router>
        <Route path='/' exact={true} component={Home} />
        <SecureRoute path='/issue-tracker' component={IssueTracker} />
      </Router>
  );
}

export default App;
