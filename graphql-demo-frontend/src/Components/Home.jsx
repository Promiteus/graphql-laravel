import {useOktaAuth} from "@okta/okta-react";


const Home = () => {
    //const { oktaAuth, authState } = useOktaAuth();

   // const login = async () => oktaAuth.signInWithRedirect();
    const logout = () => {};

    /*if (!authState) {
        return <div>Loading...</div>;
    }*/

   /* if (!authState.isAuthenticated) {
        return (
            <div>
                <p>Not Logged in yet</p>
                <button onClick={login}>Login</button>
            </div>
        );
    }*/

    return (
        <div>
            <p>Logged in!</p>
            <p>
                <a href="/issue-tracker">go to Issue Tracker</a>
            </p>
            <button onClick={logout}>Logout</button>
        </div>
    );
};

export default Home;