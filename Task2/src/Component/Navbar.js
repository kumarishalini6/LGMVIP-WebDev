import { ImMenu } from 'react-icons/im';
import "./Nav.css";
const Navbar = ({ onSetIsClicked }) => {
    const clicked = () => {
        onSetIsClicked(1);
    }
    return (
        <>
            <nav>
                <input type="checkbox" id="check" />
                <label for="check" class="checkbtn" style={{ color: "#ff77cd" }}>
                    <ImMenu className="fas fa-bars" style={{ color: "#ff77cd" }} />
                </label>
                <label class="logo">Shalini</label>
                <ul>
                    <li>
                        <a onClick={clicked} >GET USERS</a>
                    </li>
                </ul>
            </nav>
        </>
    )
}
export default Navbar;