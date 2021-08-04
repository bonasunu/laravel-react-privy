import React from "react";
import Privy from "privy-sdk";

const Home = ({ privyKey }) => {
    Privy.init({
        merchantKey: privyKey,
        dev: false,
    });

    const loginWithPrivy = () => {
        Privy.login();
    };

    return (
        <div>
            <h2>Homepage</h2>
            <button onClick={loginWithPrivy}>Login</button>
        </div>
    );
};

export default Home;
