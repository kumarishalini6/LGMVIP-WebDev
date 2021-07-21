import "../App.css";
const Home = ({ email, first_name, last_name, avatar }) => {
    return (

        <>
            <div className="background">
                <div className="container-fluid mt-5">
                    <div className="row text-center">
                        <div className="col-10 col-md-4 mt-5">
                            <div className="card p-2">
                                <div className="d-flex align-items-center">
                                    <div className="image"> <img src={avatar} className="rounded" width="155" /> </div>
                                    <div className="ml-3 w-100">
                                        <div className="p-2 mt-2  justify-content-between rounded  stats">
                                            <div className="d-flex flex-column text">
                                                <span className="articles">{first_name+' '+last_name}</span>  </div>
                                            <br></br>
                                            <div className="d-flex flex-column text">
                                                <span className="followers">{email}</span> </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Home;



