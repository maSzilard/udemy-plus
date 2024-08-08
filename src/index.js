console.log('Hello from Udemy Plus!');
import {registerBlockType} from '@wordpress/blocks/'
import block from './block.json'

registerBlockType(block.name, {
    edit() {
        return <h1>Hello from the editor!</h1>;
    }
});