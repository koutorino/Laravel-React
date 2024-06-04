import Button from "../atoms/Button";
import ImageInput from "../atoms/ImageInput";
import Input from "../molecules/Input";
import Textarea from "../molecules/Textarea";


const ContentPost = () => {
  return (
    <div className="bg-white rounded-lg">
      <form className="space-y-2">
        <Input />
        <Textarea />
        <ImageInput />
        <Button className={"bg-purple-300"}>ADD!!</Button>
      </form>
    </div>
  );
};

export default ContentPost;
