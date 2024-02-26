import React from "react";
import Moviesdata from "./Moviesdata";

const Movies = (props) => (
    <>
        {Moviesdata.map((mov) => (
            <>
                <p>{mov.name}</p>
                <p>{mov.rating}</p>
                {props.children}
                <img className="w-25" src={mov.image} alt="image" />
            </>
        ))}
    </>
);
export default Movies;
// export default class Movies extends React.Component {
//     render() {
//         return (
//             <>
//                 {Moviesdata.map((mov) => {
//                     return (
//                         <>
//                             <p>{mov.name}</p>
//               h1>Movies</h1>            <p>{mov.rating}</p>
//                             <img className="w-25" src={mov.image} alt="image" />
//                         </>
//                     );
//                 })}
//             </>
//         );
//     }
// }
