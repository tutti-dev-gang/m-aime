import Header from "@/Components/Header/Header";

export default function Guest({ children }) {
    return (
        <>
            <div className='header_container'>
                <Header is_auth={false} />
            </div> 

            <main>
                <div className="main-container no-bg">
                    {children}
                </div>
            </main>
        </>
    );
}
