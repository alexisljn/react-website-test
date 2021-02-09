'use strict';

import Toto from "./toto_jsx"

class LikeButton extends React.Component {

    constructor(props) {
        super(props);
        this.state = { liked: false };
    }

    render() {
        if (this.state.liked) {
            return 'You liked this.';
        }

        return (
            <div>
                <Toto/>
                <button onClick={() => this.setState({ liked: true }) }>
                    Like
                </button>
            </div>
        );
    }
}

let domContainer = document.querySelector('#mon-container-react');
ReactDOM.render(<LikeButton />, domContainer);
