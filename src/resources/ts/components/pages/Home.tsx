import Input from "../molecules/Input";
import Textarea from "../molecules/Textarea";
import Button from "../atoms/Button";
import ContentPost from "../organisms/ContentPost";

const Home = () => {
  return (
    <>
      <header className="h-14 bg-pink-500 px-4 flex items-center">
        <h1 className="text-white text-2xl">Sample Picture APP</h1>
      </header>
      <div className="flex p-4">
        <section className="h-screen bg-white w-1/4 p-4 rounded-lg">
          <ContentPost />
        </section>
        <main className="ml-4 bg-white w-3/4 p-4 rounded-lg">main</main>
      </div>
    </>
  );
};

export default Home;
